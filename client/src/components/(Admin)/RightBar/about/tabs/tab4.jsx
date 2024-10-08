import styles from "@/components/(Admin)/RightBar/RightBar.module.scss";
import TitleBlock from "@/components/(Admin)/TitleBlock/TitleBlock";
import DescBlock from "@/components/(Admin)/DescBlock/DescBlock";

const Tab4 = ({formData, handleInputChange, subType}) => (
    <div className={`${styles['admin-fields-wrap']}`}>
        <TitleBlock
            sectionTitle="Section title"
            sectionTitleVal={formData['cp_pc_title']}
            onChange={(event) => handleInputChange('cp_pc_title', event.target.value, subType)}
            inputID="cp-pc-title"
            inputPlaceholder="Add your title here..."
        />
        <DescBlock
            sectionTitle="Description"
            sectionTitleVal={formData['cp_pc_text']}
            inputID="cp-pc-text"
            inputName="cp-pc-text"
            onChange={(event) => handleInputChange('cp_pc_text', event.target.value, subType)}
        />
    </div>
)

export default Tab4